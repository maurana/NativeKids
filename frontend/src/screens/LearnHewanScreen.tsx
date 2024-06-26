import * as React from 'react';
import { SafeAreaView,FlatList} from 'react-native';
import { 
    NativeBaseProvider, 
    Text, View, Box,
    Pressable, Image, Center,
    HStack, Spinner, Heading
  } from "native-base";
import { host } from '../config/host';
import { theme } from '../config/theme';

function renderLoading(): any {
  return (
    <HStack space={2} justifyContent="center">
    <Spinner accessibilityLabel="Loading posts" color="yellow.500"/>
    <Heading color="amber.500" fontSize="md">
      Loading..
    </Heading>
    </HStack>
  );
}

function renderItem({item}: any): any {
  let uri: string = host+'/data/hewan/'+item.file;
  return (
      <Pressable alignItems={'center'} justifyContent={'center'} mx={3} h={32} w={32} my={3} rounded="8" overflow="hidden" borderWidth="1" borderColor="coolGray.300" shadow="3" bg="coolGray.100" p={0}>
        <Box>
        <Center>
        <Image source={{uri:uri}} alt='image' size="sm" />
        <Text mt={3} fontSize={13} fontWeight={'bold'} color={'yellow.800'}>
            {item.name}
          </Text>
        </Center>
        </Box>
      </Pressable>
  );
}

export default function LearnHewanScreen() {
  const [data, setData] = React.useState([]);
  const [loading, setLoading] = React.useState(true);

  const getPicturesFromApi = async () => {
    return await fetch(host+'/api/pictures/categories/3', {
      method: 'GET',
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      }})
      .then(response => response.json())
      .then(json => {
        setData(json);
        setLoading(false);
      })
      .catch(error => {
        console.error(error);
      });
  }

  React.useEffect(function () {
    getPicturesFromApi();
  }, []);

    return (
      <NativeBaseProvider theme={theme}>
        <SafeAreaView style={{flex: 1}}>
        <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center'}} bg={'yellow.50'}>
         {
          loading ? renderLoading() : <FlatList numColumns={4} data={data} renderItem={renderItem} />
         }
        </View>
        </SafeAreaView>
      </NativeBaseProvider>
    );
}
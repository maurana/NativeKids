import * as React from 'react';
import { SafeAreaView, FlatList} from 'react-native';
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
  let uri: string = host+'/data/angka/'+item.file;
  return (
      <Pressable alignItems={'center'} justifyContent={'center'} mx={3} h={20} w={20} my={3} p={0}>
        <Box>
        <Center>
        <Image source={{uri:uri}} alt='image' size="sm" />
        </Center>
        </Box>
      </Pressable>
  );
}

export default function LearnAngkaScreen() {
  const [data, setData] = React.useState([]);
  const [loading, setLoading] = React.useState(true);

  const getPicturesFromApi = async () => {
    return await fetch(host+'/api/pictures/categories/2', {
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
          loading ? renderLoading() : <><Text mt={4} mb={4} fontSize={17} fontWeight={'semibold'} color={'dark.300'}>Angka dari 0 sampai 9</Text>
          <FlatList numColumns={5} data={data} renderItem={renderItem} /></>
        }
        </View>
        </SafeAreaView>
      </NativeBaseProvider>
    );
}
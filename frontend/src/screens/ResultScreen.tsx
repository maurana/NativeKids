import * as React from 'react';
import { SafeAreaView, FlatList} from 'react-native';
import { 
  NativeBaseProvider, Pressable,
  Text, View, Box, Center, Image,
  HStack, Spinner, Heading, Container
} from "native-base";
import { ResultScreenProp } from '../config/types';
import { host } from '../config/host';
import { theme } from '../config/theme';

function renderLoading(): any {
  return (
    <HStack space={2} justifyContent="center">
    <Spinner accessibilityLabel="Loading posts" />
    <Heading color="primary.500" fontSize="md">
      Loading..
    </Heading>
    </HStack>
  );
}

function renderItem({item}: any): any {
  let uri: string = host+'/data/buah/'+item.file;
  return (
      <Pressable alignItems={'center'} justifyContent={'center'} mt={12}>
        <Box>
        <Center>
          <Text fontSize={24} fontWeight={'bold'} color={'dark.300'}>
            Skor {item.players_name}
          </Text>
          <Text fontSize={50} fontWeight={'bold'} color={'yellow.800'}>
            {item.score}
          </Text>
        </Center>
        </Box>
      </Pressable>
  );
}

export default function ResultScreen({route,navigation}:ResultScreenProp) {
  const [data, setData] : any = React.useState([]);
  const [loading, setLoading] = React.useState(true);

  const getResultsFromApi = async () => {
    return await fetch(host+'/api/results/mix/'+route.params.data, {
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
    getResultsFromApi();
  }, []);
    return (
      <NativeBaseProvider theme={theme}>
        <SafeAreaView style={{flex: 1}}>
        <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center'}} bg={'yellow.50'}>
        <Container>
          {
          loading ? renderLoading() : <View alignItems={'center'} justifyContent={'center'}><FlatList numColumns={1} data={data} renderItem={renderItem}/><View flex={1} mt={-40} h={32} w={32} alignItems={'center'} justifyContent={'center'}><Pressable onPress={() => navigation.navigate('HomeScreen')}>
          <Image source={require('../assets/kembali.png')} alt='image' size="sm" />
        </Pressable></View></View>
          }
        </Container>
        </View>
        </SafeAreaView>
      </NativeBaseProvider>
    );
}
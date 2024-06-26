import * as React from 'react';
import { FlatList, SafeAreaView} from 'react-native';
import SoundPlayer from 'react-native-sound-player'
import { 
    NativeBaseProvider, 
    Text, View, Pressable,
    HStack, Spinner, Heading, Image
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

function handleAudio (file: string): any {
  let uri: string = host+'/data/suara/'+file;
  SoundPlayer.playUrl(uri);
}

function renderItem({item}: any): any {
  let uri: string = host+'/data/huruf/'+item.pictures_file;
  return (
    <View mb={2}>
    <Pressable onPress={() => handleAudio(item.sounds_file)} mx={4} mb={4} h="12" w="12"  alignItems={'center'} justifyContent={'center'}><Image source={{uri:uri}} alt='image' size="sm" width={'100%'} height={50}/></Pressable>
    </View>
  );
}

export default function LearnHurufScreen() {
  const [data, setData] = React.useState([]);
  const [loading, setLoading] = React.useState(true);

  const getPicturesSoundsFromApi = async () => {
    return await fetch(host+'/api/psjuncts/mix/1', {
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
    getPicturesSoundsFromApi();
  }, []);
  

    return (
      <NativeBaseProvider theme={theme}>
        <SafeAreaView style={{flex: 1}}>
        <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center'}} bg={'yellow.50'}>
        {
          loading ? renderLoading() : <><Text mt={4} mb={4} fontSize={17} fontWeight={'semibold'} color={'dark.300'}>Huruf Alfabet dari A sampai Z</Text>
          <FlatList key={7} numColumns={7} data={data} renderItem={renderItem} /></>
        }
        </View>
        </SafeAreaView>
      </NativeBaseProvider>
    );
}
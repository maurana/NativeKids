import * as React from 'react';
import { Alert, BackHandler } from 'react-native';
import { 
    NativeBaseProvider, 
    Text, View, Pressable,
    Container, HStack, Image
  } from "native-base";
import { HomeScreenProp } from '../config/types';
import { theme } from '../config/color';

export default function HomeScreen({navigation}:HomeScreenProp) {
  function handleExit() : any {
    if (navigation.isFocused()) {
      Alert.alert(
      "Keluar Aplikasi",
      "Apakah anda ingin keluar?",
      [
        {
          text: "Tidak",
          onPress: () => console.log("Cancel Pressed"),
          style: "cancel"
        },
        { text: "Ya", onPress: () => BackHandler.exitApp() }
      ],
      { cancelable: false }
      );
    }
  }

    return (
        <NativeBaseProvider>
        <View style={{flex:1, alignItems: 'center', justifyContent: 'center' }} bg={'warning.50'}>
          <Container>
          <HStack space={10} justifyContent="center">
          <Pressable onPress={() => navigation.navigate('ChoiceScreen', {data: null})} h="40" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/start.png')} alt='image' width={'100%'} height={50}/></Pressable>
          <Pressable onPress={() => navigation.navigate('AboutScreen', {data: null})} h="40" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/about.png')} alt='image' width={'100%'} height={50}/></Pressable>
          <Pressable onPress={() => handleExit()} h="40" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/exit.png')} alt='image' width={'100%'} height={50}/></Pressable>
          </HStack>
          </Container>
        </View>
        </NativeBaseProvider>
    );
} 
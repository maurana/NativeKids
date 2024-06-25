import * as React from 'react';
import { 
    NativeBaseProvider, 
    Text, View, Pressable,
    Container, HStack, Image
  } from "native-base";
import { MenuScreenProp } from '../config/types';
import { theme } from '../config/color';


export default function MenuScreen({route, navigation}:MenuScreenProp) {
    let choice : number = route.params.data; 
    return (
      <NativeBaseProvider>
        <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center',  }} bg={'warning.50'}>
          <Container>
          {
            choice === 1 ?
            <>
            <HStack space={10} justifyContent="center">
            <Pressable onPress={() => navigation.navigate('LearnHurufScreen', {data: 1})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/huruf.png')} alt='image' width={'100%'} height={50}/></Pressable>
            <Pressable onPress={() => navigation.navigate('LearnAngkaScreen', {data: 2})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/angka.png')} alt='image' width={'100%'} height={50}/></Pressable>
            </HStack>
            <HStack space={10} justifyContent="center" marginTop={5}>
            <Pressable onPress={() => navigation.navigate('LearnHewanScreen', {data: 3})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/hewan.png')} alt='image' width={'100%'} height={50}/></Pressable>
            <Pressable onPress={() => navigation.navigate('LearnBuahScreen', {data: 4})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/buah.png')} alt='image' width={'100%'} height={50}/></Pressable>
            </HStack>
            </> 
            :
            <HStack space={10} justifyContent="center">
            <Pressable onPress={() => navigation.navigate('PlayAngkaScreen', {data: 2})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/angka.png')} alt='image' width={'100%'} height={50}/></Pressable>
            <Pressable onPress={() => navigation.navigate('PlayHewanScreen', {data: 3})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/hewan.png')} alt='image' width={'100%'} height={50}/></Pressable>
            <Pressable onPress={() => navigation.navigate('PlayBuahScreen', {data: 4})} h="20" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/buah.png')} alt='image' width={'100%'} height={50}/></Pressable>
            </HStack>
          }
          </Container>
        </View>
      </NativeBaseProvider>
    );
}
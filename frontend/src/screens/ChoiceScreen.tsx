import * as React from 'react';
import { 
    NativeBaseProvider, 
    View, Pressable,
    Container, HStack, Image
  } from "native-base";
import { ChoiceScreenProp } from '../config/types';
import { theme } from '../config/theme';

export default function ChoiceScreen({navigation}:ChoiceScreenProp) {
    return (
      <NativeBaseProvider theme={theme}>
         <View style={{flex:1, alignItems: 'center', justifyContent: 'center' }} bg={'warning.50'}>
          <Container>
          <HStack space={10} justifyContent="center">
          <Pressable onPress={() => navigation.navigate('MenuScreen', {data: 1})} h="40" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/belajar.png')} alt='image' width={'100%'} height={50}/></Pressable>
          <Pressable onPress={() => navigation.navigate('MenuScreen', {data: 2})} h="40" w="40" alignItems={'center'} justifyContent={'center'}><Image source={require('../assets/bermain.png')} alt='image' width={'100%'} height={50}/></Pressable>
          </HStack>
          </Container>
        </View>
      </NativeBaseProvider>
    );
}
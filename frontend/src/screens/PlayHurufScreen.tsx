import * as React from 'react';
import { SafeAreaView, ScrollView } from 'react-native';
import { 
    NativeBaseProvider, 
    Text, View, Box, Image,
    HStack, Stack, Center,
    Heading, FormControl,
    Radio, Input, Button, Spinner
  } from "native-base";
import { PlayHurufScreenProp } from '../config/types';
import { QA_Huruf } from '../config/qa';
import { host } from '../config/host';
import { theme } from '../config/theme';

async function submit(data:object) {
  try {
    const response = await fetch(host+'/api/results/mix', {
      method: "POST",
      headers: {
        Accept: 'application/json',
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();
    return result;
  } catch (error) {
    console.error("Error:", error);
  }
}

function renderLoading(): any {
  return (
    <HStack space={2} justifyContent="center">
    <Spinner accessibilityLabel="Loading posts" color={'white'} />
    <Heading color="white" fontSize="md">
      Loading..
    </Heading>
    </HStack>
  );
}

export default function PlayHurufScreen({route,navigation}:PlayHurufScreenProp) {
    let uri: string = host+'/data/huruf/';
    const [btnDisabled, setBtnDisabled] = React.useState(false);
    const [nama, setNama] = React.useState('');
    const [answer, setAnswer] = React.useState(Object);

    const handleChangeNama = (text: any) => setNama(text);
    const handleChange=(key: any,value: any) => {
      const myState = answer;
      myState[key] = value
      setAnswer(myState)
    }

    const handleClick = async () => {
      let skor: number = 0;
      let arrA: any = [];
      let arrB: any = [];
      setBtnDisabled(!btnDisabled);
      Object.keys(answer).forEach((el) => arrA.push(answer[el]));
      QA_Huruf.forEach((val, idx) => arrB.push(val.answer));
      for (let i = 0; i < 10; i++) {
        if (arrA[i] === arrB[i]) {
          skor = skor + 10;
        }
      }
      const dataSubmit = {name:nama,score:skor,categories_id:route.params.data}
      const response : any = await submit(dataSubmit);
      if (response != null || response != undefined) {
        setBtnDisabled(!btnDisabled);
        return navigation.navigate('ResultScreen', {data: response.id});
      }
    }

    return (
      <NativeBaseProvider theme={theme}>
        <View style={{ flex: 1}} bg={'yellow.50'}>
        <SafeAreaView>
          <ScrollView>
            <View flex={1} alignItems={'center'} justifyContent={'center'}>
            <Box maxW={'50%'} w={'full'} mt={5} rounded="lg" borderColor={'coolGray.200'} borderWidth={1} p={4} bg={'white'} shadow={2}>
              <Text color={'dark.300'} fontWeight={'bold'}>Nama Pemain :</Text>
              <Box w="100%" maxWidth="300px">
                <FormControl isRequired isInvalid={false}>
                  <Stack>
                    <Input my={2} type="text" bg={'white'} color={'dark.300'} value={nama} onChangeText={handleChangeNama}/>
                  </Stack>
                </FormControl>
              </Box>
            </Box>
            </View>

          { QA_Huruf.map((val: any) : any =>
            <Box alignItems="center" my={5} key={val.id}>
            <Box maxW={'90%'} w={'full'} rounded="lg" overflow="hidden" borderColor="coolGray.200" borderWidth="1" bg={'white'} flex={1} shadow={2}>
              <Center bg="amber.500" _text={{
                  color: "warmGray.50",
                  fontWeight: "700",
                  fontSize: "xs"
                }} position="relative" bottom="0" px="3" py="0.5">
              </Center>
              <Stack p="4" space={3}>
                <Stack space={2}>
                  <Heading size="sm" ml="-1" color={'amber.400'}>
                    SOAL {val.id}
                  </Heading>
                </Stack>
                <Text fontWeight="900" color={'dark.200'}>
                  {val.question}
                </Text>
                <Stack direction={{
                  base: "column",
                  md: "row"
                }} alignItems={{
                  base: "flex-start",
                  md: "center"
                }} my={3}>
                <Radio.Group name={val.id} alignItems="center" space={4} justifyContent="space-between" onChange={(e) => handleChange(val.id,e)}>
                  <HStack alignItems="center">
                    {val.choice.map((val2:any) : any => <Radio _text={{color:'dark.300'}} backgroundColor={'white'} value={val2.val} colorScheme="yellow" size="md" ml={6}key={val2.val}>
                    <Image source={{uri:uri+val2.text}} alt='image' size="sm" />
                    </Radio>)}
                  </HStack>
                </Radio.Group>
                </Stack>
              </Stack>
            </Box>
          </Box>)}
          <Center flex={1} alignContent={'center'} justifyContent={'center'}>
            {nama !== ''? <Button aria-label="Hitung Skor" disabled={btnDisabled} onPress={() => handleClick()} maxW={'90%'} w={'full'} rounded="lg" borderColor="amber.200" borderWidth="1" bg={'amber.500'} shadow={2} mt={2} mb={5} fontWeight={'bold'}>{btnDisabled == true ? renderLoading() : <Text fontWeight={'bold'} color={'white'}>Hitung Skor</Text>}</Button>: null}
          </Center>
          </ScrollView>
        </SafeAreaView>
        </View>
      </NativeBaseProvider>
    );
}
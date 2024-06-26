import * as React from 'react';
import { 
    NativeBaseProvider, 
    Text, View, Container
  } from "native-base";
import { theme } from '../config/theme';

export default function AboutScreen() {
    return (
      <NativeBaseProvider theme={theme}>
        <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }} bg={'yellow.50'}>
          <Container>
          <Text fontWeight={900} color={'dark.200'}> TENTANG APLIKASI </Text>
          </Container>
          <Container marginTop={4} marginBottom={8}>
          <Text alignItems={'normal'} fontWeight={600} color={'dark.200'}>Aplikasi pembelajaran anak umur 3 hingga 5 tahun berbasis mobile platform yang di kembangkan untuk mendorong tingkat imajinasi serta intelektualitas dalam proses pembelajaran, agar anak belajar menjadi lebih asyik dan menyenangkan.</Text>
          </Container>
          <Container>
          <Text color={'amber.700'}> Apps©2024 v1.0.0 </Text>
          </Container>
        </View>
      </NativeBaseProvider>
    );
}
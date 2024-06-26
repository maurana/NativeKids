import * as React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { StackParamList } from '../config/types';
// screen
import HomeScreen from '../screens/HomeScreen';
import AboutScreen from '../screens/AboutScreen';
import ChoiceScreen from '../screens/ChoiceScreen';
import MenuScreen from '../screens/MenuScreen';
import ResultScreen from '../screens/ResultScreen';
import LearnAngkaScreen from '../screens/LearnAngkaScreen';
import LearnBuahScreen from '../screens/LearnBuahScreen';
import LearnHewanScreen from '../screens/LearnHewanScreen';
import LearnHurufScreen from '../screens/LearnHurufScreen';
import PlayAngkaScreen from '../screens/PlayAngkaScreen';
import PlayBuahScreen from '../screens/PlayBuahScreen';
import PlayHewanScreen from '../screens/PlayHewanScreen';
import PlayHurufScreen from '../screens/PlayHurufScreen';

const Router = createNativeStackNavigator<StackParamList>();

const StackNavigator = () => {
  return (
    <Router.Navigator screenOptions={{
      headerStyle: {
        backgroundColor: '#d97706',
      },
      headerTintColor: '#fff',
      headerTitleStyle: {
        fontWeight: 'bold',
        fontSize: 17,
      },
     }}>
      <Router.Screen name="HomeScreen" component={HomeScreen} options={{ title: 'BERANDA' }}/>
      <Router.Screen name="AboutScreen" component={AboutScreen} options={{ title: 'TENTANG' }}/>
      <Router.Screen name="ChoiceScreen" component={ChoiceScreen} options={{ title: 'MULAI' }}/>
      <Router.Screen name="MenuScreen" component={MenuScreen} options={{ title: 'MENU' }}/>
      <Router.Screen name="ResultScreen" component={ResultScreen} options={{ title: 'HASIL' }}/>
      <Router.Screen name="LearnAngkaScreen" component={LearnAngkaScreen} options={{ title: 'BELAJAR ANGKA' }}/>
      <Router.Screen name="LearnBuahScreen" component={LearnBuahScreen} options={{ title: 'BELAJAR BUAH' }}/>
      <Router.Screen name="LearnHewanScreen" component={LearnHewanScreen} options={{ title: 'BELAJAR HEWAN' }}/>
      <Router.Screen name="LearnHurufScreen" component={LearnHurufScreen} options={{ title: 'BELAJAR HURUF' }}/>
      <Router.Screen name="PlayAngkaScreen" component={PlayAngkaScreen} options={{ title: 'BERMAIN ANGKA' }}/>
      <Router.Screen name="PlayBuahScreen" component={PlayBuahScreen} options={{ title: 'BERMAIN BUAH' }}/>
      <Router.Screen name="PlayHewanScreen" component={PlayHewanScreen} options={{ title: 'BERMAIN HEWAN' }}/>
      <Router.Screen name="PlayHurufScreen" component={PlayHurufScreen} options={{ title: 'BERMAIN HURUF' }}/>
    </Router.Navigator>
  );
};

export default StackNavigator;
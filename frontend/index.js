/**
 * @format
 */

import {AppRegistry, LogBox} from 'react-native';
import App from './App';
import {name as appName} from './app.json';

AppRegistry.registerComponent(appName, () => App);
LogBox.ignoreLogs([ 'In React 18, SSRProvider is not necessary and is a noop. You can remove it from your app.', ])
import type { NativeStackScreenProps } from "@react-navigation/native-stack";

export type StackParamList = {
    HomeScreen: undefined,
    AboutScreen: { data: any },
    ChoiceScreen: { data: any },
    MenuScreen: { data: any },
    LearnAngkaScreen: { data: any },
    LearnBuahScreen: { data: any },
    LearnHewanScreen: { data: any },
    LearnHurufScreen: { data: any },
    PlayAngkaScreen: { data: any },
    PlayBuahScreen: { data: any },
    PlayHewanScreen: { data: any },
    PlayHurufScreen: { data: any },
    ResultScreen: { data: any, state: any},
}

export type HomeScreenProp = NativeStackScreenProps<StackParamList, 'HomeScreen'>;
export type AboutScreenProp = NativeStackScreenProps<StackParamList, 'AboutScreen'>;
export type ChoiceScreenProp = NativeStackScreenProps<StackParamList, 'ChoiceScreen'>;
export type MenuScreenProp = NativeStackScreenProps<StackParamList, 'MenuScreen'>;
export type ResultScreenProp = NativeStackScreenProps<StackParamList, 'ResultScreen'>;
export type LearnAngkaScreenProp = NativeStackScreenProps<StackParamList, 'LearnAngkaScreen'>;
export type LearnBuahScreenProp = NativeStackScreenProps<StackParamList, 'LearnBuahScreen'>;
export type LearnHewanScreenProp = NativeStackScreenProps<StackParamList, 'LearnHewanScreen'>;
export type LearnHurufScreenProp = NativeStackScreenProps<StackParamList, 'LearnHurufScreen'>;
export type PlayAngkaScreenProp = NativeStackScreenProps<StackParamList, 'PlayAngkaScreen'>;
export type PlayBuahScreenProp = NativeStackScreenProps<StackParamList, 'PlayBuahScreen'>;
export type PlayHewanScreenProp = NativeStackScreenProps<StackParamList, 'PlayHewanScreen'>;
export type PlayHurufScreenProp = NativeStackScreenProps<StackParamList, 'PlayHurufScreen'>;
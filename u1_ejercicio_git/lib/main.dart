import 'package:flutter/material.dart';
import 'package:u1_ejercicio_git/constants.dart';
import 'package:u1_ejercicio_git/pages/home_page.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Color(kPrimary)),
        appBarTheme: AppBarTheme(
          backgroundColor: Color(kPrimary),
          titleTextStyle: TextStyle(color: Colors.white, fontSize: 20, fontWeight: FontWeight.bold),
          centerTitle: true,
          iconTheme: IconThemeData(color: Colors.white, size: 30),
        ),
        useMaterial3: true,
      ),
      home: HomePage(),
    );
  }
}

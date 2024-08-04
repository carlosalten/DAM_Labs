import 'package:card_swiper/card_swiper.dart';
import 'package:flutter/material.dart';
import 'package:flutter_material_design_icons/flutter_material_design_icons.dart';
import 'package:u1_ejercicio_git/constants.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;

    return Scaffold(
      extendBodyBehindAppBar: true,
      appBar: AppBar(
        elevation: 0,
        backgroundColor: Colors.transparent,
        title: Text('Ejemplo App Repo Git'),
        leading: Icon(MdiIcons.alphaFCircle),
      ),
      body: Column(
        children: [
          Container(
            height: 280,
            width: double.infinity,
            decoration: BoxDecoration(
              gradient: LinearGradient(
                begin: Alignment.bottomLeft,
                end: Alignment.topRight,
                colors: <Color>[Color(kPrimary), Colors.lightBlue.shade600],
              ),
            ),
            child: Stack(
              clipBehavior: Clip.none,
              alignment: Alignment.bottomCenter,
              children: [
                Positioned(
                  bottom: -50,
                  child: Container(
                    height: 200,
                    padding: EdgeInsets.all(5),
                    width: MediaQuery.of(context).size.width * 0.95,
                    decoration: BoxDecoration(
                      color: Colors.white,
                      border: Border.all(color: Color(kPrimary)),
                      borderRadius: BorderRadius.all(Radius.circular(10)),
                    ),
                    child: Swiper(
                      itemCount: 6,
                      pagination: SwiperPagination(
                        builder: SwiperPagination.dots,
                      ),
                      itemBuilder: (BuildContext context, int index) {
                        return Image.asset(
                          'assets/images/svm${index + 1}.jpg',
                          fit: BoxFit.fill,
                        );
                      },
                    ),
                  ),
                ),
              ],
            ),
          ),
          Expanded(
            child: Container(
              margin: EdgeInsets.fromLTRB(10, 60, 10, 10),
              padding: EdgeInsets.symmetric(vertical: 20, horizontal: 10),
              width: double.infinity,
              decoration: BoxDecoration(
                color: Colors.white,
                borderRadius: BorderRadius.all(Radius.circular(10)),
              ),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Container(
                    margin: EdgeInsets.only(bottom: 20),
                    child: Text(
                      'Desarrollo de Aplicaciones Móviles',
                      style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold, color: Color(0xFF333333)),
                    ),
                  ),
                  Text(
                    kTextoDemo,
                    textAlign: TextAlign.justify,
                  ),
                ],
              ),
            ),
          ),
          Container(
            // color: Colors.blue,
            height: size.height * 0.15,
            width: double.infinity,
            alignment: Alignment.bottomLeft,
            child: CustomPaint(
              painter: _FooterPainter(),
              child: Container(
                alignment: Alignment.bottomRight,
                width: double.infinity,
                height: double.infinity,
                child: Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.end,
                    mainAxisAlignment: MainAxisAlignment.end,
                    children: [
                      Text(
                        'Técnico Universitario en Informática\nIngeniería en Informática',
                        style: TextStyle(color: Colors.white, fontSize: 16, fontWeight: FontWeight.bold),
                        textAlign: TextAlign.end,
                      ),
                      Text(
                        'USM Sede Viña del Mar',
                        style: TextStyle(color: Colors.white),
                      ),
                    ],
                  ),
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }
}

class _FooterPainter extends CustomPainter {
  @override
  void paint(Canvas canvas, Size size) {
    final paint = new Paint();
    paint.color = Color(kError);
    paint.style = PaintingStyle.fill;
    paint.strokeWidth = 10;

    final path = new Path();
    print(size);
    path.moveTo(0, size.height * 0.4);
    path.lineTo(0, size.height);
    path.lineTo(size.width, size.height);
    path.lineTo(size.width, 0);
    path.lineTo(0, size.height * 0.4);

    canvas.drawPath(path, paint);
  }

  @override
  bool shouldRepaint(covariant CustomPainter oldDelegate) => false;
}

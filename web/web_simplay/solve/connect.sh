#!/bin/bash
dic=(a b c d e f g h i j k l m n o p q r s t u v w x y z 1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z)
for char in ${dic[@]}; do
  echo "letra $char: " >> result && curl "http://192.168.2.112:1337/?format=$char'" | grep time >> result
  echo -e "" >> result
done

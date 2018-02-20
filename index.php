<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 19.02.18
     * Time: 18:30
     */



    //Написать функцию, которая будет принимать в качестве аргумента не пустой массив,
    // будет находить минимальное и максимальнрое значения массива и будет возвращать
    // массив найденых ['min'=>$min, 'max' => $max] значений.

   // Написать функцию, которая будет возвращать текст анонса. Она должна принимать 2 аргумента:
    // строку текста, и количество символов. Если строка текста длиннее 2-го аргумента, то ее необходимо
    // обрезать по границе ближайшего слова и добавить ... иначе возвращать строку без изменений.
    function minmax(array $arr1){

        if (!empty($arr1)) {
            $val1 = min($arr1);
            $val2 = max($arr1);


            $arr = array('min' => $val1, 'max' => $val2);
        }
        else
            $arr='Array is empty';
    return $arr;
    }

    function announce($text, $chars){

        if (strlen($text)>$chars) {

            $arr = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY);
            $i=$chars-1;
            while ($i>=0) {
                if ($arr[$i] <>' ') {
                   $i--;
                }
                else {

                    array_splice($arr,$i+1);
                    $out=implode($arr);
                    break;

                }

            $out='cannot split';
            }
        }
        else {
            $out=$text;}

        return $out.'...';
    }

    //min-max
    echo "output " .var_export(minmax([50,20,0,1,35]),1)."<br>";

    //announce
    $ann=announce('Количество символов, по которым строка будет перенесена',24);
    echo "Announce: '$ann'";
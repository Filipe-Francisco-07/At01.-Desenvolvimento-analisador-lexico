<?php 

// Atividade 1 - Compiladores

$sigma = array('a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y','z');
$num = array(0,1,2,3,4,5,6,7,8,9);

$delta = array('q0'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q26', 'e'=>'q4','f'=> 'q8', 'g'=>'q3', 'h'=>'q3','i'=>'q1', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q28', 'q'=>'q3', 'r'=>'q33', 's'=>'q15', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q21', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3',0 => 'q37', 1 => 'q37', 2 => 'q37', 3 => 'q37', 4 => 'q37', 5 => 'q37', 6 => 'q37', 7 => 'q37', 8 => 'q37', 9 => 'q37', '+' => 'q38', '-' => 'q40','*' => 'q42','/' => 'q43','%' => 'q44','>' => 'q45','<' => 'q47','!' => 'q49','^' => 'q51','(' => 'q52',')' => 'q53','[' => 'q54',']' => 'q55','{' => 'q56','}' => 'q57'),
              //if (2)
               'q1'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q2', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
               'q2'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //identificador (3)
               'q3'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //else (7)
               'q4'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q5', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),            
               'q5'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q6', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),             
               'q6'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q7','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
               'q7'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //for (10) e foreach (14)
              'q8'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q9', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q9'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q10', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q10'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q11','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q11'=>array('a'=>'q12', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q12'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q13', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q13'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q14','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q14'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //switch (20)
              'q15'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q16', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q16'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q17', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q17'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q18', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q18'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q19', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q19'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q20','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q20'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //while (25)
              'q21'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q22','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q22'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q23', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q23'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q24', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q24'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q25','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q25'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //do (27)
              'q26'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q27', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q27'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //print (32)
              'q28'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q29', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q29'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q30', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q30'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q31', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q31'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q32', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q32'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //read (36)
              'q33'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q34','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q34'=>array('a'=>'q35', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q35'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q36', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              'q36'=>array('a'=>'q3', 'b'=>'q3', 'c'=>'q3', 'd'=>'q3', 'e'=>'q3','f'=> 'q3', 'g'=>'q3', 'h'=>'q3','i'=>'q3', 'j'=>'q3', 'k'=>'q3', 'l'=>'q3', 'm'=>'q3', 'n'=>'q3', 'o'=>'q3', 'p'=>'q3', 'q'=>'q3', 'r'=>'q3', 's'=>'q3', 't'=>'q3', 'u'=>'q3', 'v'=>'q3', 'w'=>'q3', 'x'=>'q3', 'y'=>'q3', 'z'=>'q3', 0 => 'q3', 1 => 'q3', 2 => 'q3', 3 => 'q3', 4 => 'q3', 5 => 'q3', 6 => 'q3', 7 => 'q3', 8 => 'q3', 9 => 'q3'),
              //constante (37)
              'q37'=>array(0 => 'q37', 1 => 'q37', 2 => 'q37', 3 => 'q37', 4 => 'q37', 5 => 'q37', 6 => 'q37', 7 => 'q37', 8 => 'q37', 9 => 'q37'),
              //+ (38)
              'q38'=>array('+' => 'q39'),
              //++ (39)
              'q39'=>array(),
              //- (40)
              'q40'=>array('-' => 'q41'),
              //-- (41)
              'q41'=>array(), 
              //* (42)
              'q42'=>array(),
              //(/) (43)
              'q43'=>array(), 
              //% (44)
              'q44'=>array(),
              //> (45)
              'q45'=>array('=' => 'q46'), 
              //>= (46)
              'q46'=>array(),
              //< (47)
              'q47'=>array('=' => 'q48'), 
              //<= (48)
              'q48'=>array(),
              'q49'=>array('=' => 'q50'), 
              //!= (50)
              'q50'=>array(),
              // ^ (51)
              'q51'=>array(), 
              // ( (52)
              'q52'=>array(),
              // ) (53)
              'q53'=>array(),
              // [ (54) 
              'q54'=>array(),
              // ] (55)
              'q55'=>array(),
              // { (56) 
              'q56'=>array(),
              // } (57)
              'q57'=>array());

$Q = array('q0','q1', 'q2', 'q3', 'q4', 'q5', 'q6','q7', 'q8', 'q9', 'q10', 'q11', 'q12','q13','q14','q15','q16','q17','q18','q19','q20','q21','q22','q23','q24','q25','q26','q27','q28','q29','q30','q31','q32','q33','q34','q35','q36','q37','q38','q39','q40','q41','q42','q43','q44','q45','q46','q47','q48','q49','q50','q51','q52','q53','q54','q55','q56','q57');

$q0 = 'q0';
$count = 0;
$pos1 = 0;
$pos2 = 0;

$finais = array('q2', 'q3', 'q7', 'q10', 'q14', 'q20','q25','q32','q36','q37', 'q38', 'q39','q40','q41','q42', 'q43', 'q44','q45','q46','q47', 'q48', 'q50','q51','q52','q53', 'q54', 'q55','q56','q57');

$palavra = (isset($_POST['entrada'])?$_POST['entrada']:""); 

echo "Palavra  atual: ".$palavra."<br>";

$array_palavra = explode(" ",$palavra);
$tam = count($array_palavra);

$estado = $q0;

for($j = 0; $j < $tam; $j++){
    for($i = 0; $i < strlen($array_palavra[$j]); $i++){
        $count++;
       
        $palavra_atual = $array_palavra[$j];
        $estado = $delta[$estado][$palavra_atual[$i]];

        if($i == 0){
            $pos1 = $count;
        }
        if($i == strlen($array_palavra[$j])-1){
            $pos2 = $count;
        }
    }
    

    if(in_array($estado,$finais)){
        // token , palavra,  pos1 , pos2
        $token = "";

        switch ($estado) {
            case 'q2':
                $token = "Palavra reservada: IF";
                break;
            case 'q3':
                $token = "ID";
                break;
            case 'q7':
                $token ="Cadeia reservada: ELSE";
                break;
            case 'q10':
                $token ="Cadeia reservada: FOR";
                break;
            case 'q14':
                $token ="Cadeia reservada: FOREACH";
                break;
            case 'q20':
                $token ="Cadeia reservada: SWITCH";
                break;
            case 'q25':
                $token ="Cadeia reservada: WHILE";
                break;
            case 'q32':
                $token ="Cadeia reservada: PRINT";
                break;
            case 'q36':
                $token ="Cadeia reservada: DO";
                break;
            case 'q37':
                $token ="CONSTANTE";
                break;
            case 'q38':
                $token ="OPERADOR";
                break;
            case 'q39':
                $token ="OPERADOR";
                break;
            case 'q40':
                $token ="OPERADOR";
                break;
            case 'q41':
                $token ="OPERADOR";
                break;
            case 'q42':
                $token ="OPERADOR";
                break;
            case 'q43':
                $token ="OPERADOR";
                break;
            case 'q44':
                $token ="OPERADOR";
                break;
            case 'q45':
                $token ="OPERADOR";
                break;
            case 'q46':
                $token ="OPERADOR";
                break;
            case 'q47':
                $token ="OPERADOR";
                break;
            case 'q48':
                $token ="OPERADOR";
                break;
            case 'q49':
                $token ="OPERADOR";
                break;
            case 'q50':
                $token ="OPERADOR";
                break;
            case 'q51':
                $token ="OPERADOR";
                break;
            case 'q52':
                $token ="SEPARADOR";
                break;
            case 'q53':
                $token ="SEPARADOR";
                break;
            case 'q54':
                $token ="SEPARADOR";
                break;
            case 'q55':
                $token ="SEPARADOR";
                break;
            case 'q56':
                $token ="SEPARADOR";
                break;
            case 'q57':
                $token ="SEPARADOR";
                break;
            default:
                echo "<br>O estado não é final.";
        }        
        echo "<br>Token: '".$token. "',   Palavra: '".$palavra_atual."',   Estado: '$estado'".",   Posição inicial: '".$pos1."',   Posição final:'".$pos2."'<br>";

        $pos1 = 0;
        $pos2 = 0; 
        $estado = 'q0';
    }else{
        echo "Cadeia rejeitada"."<br>Estado atual: ".$estado;
        break;
    }   
}
echo '<br><a href="index.html">digitar novamente</a>';

?>
 
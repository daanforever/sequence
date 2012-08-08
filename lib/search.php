<?
  $result  = preg_split("/[\s\;]+/", $_REQUEST["set"]);
  $request = preg_split("/[\s\;]+/", $_REQUEST["set"]);
  # print_r ($result);
  $result = search($result);
  echo mathfilter("<m>$result</m>", 24, "img/");
  seqSearch($request);

  function search ($a) {
    $d = $a[1] - $a[0];
    $result = true;
    for ($i = 2; $i < (count($a) - 1); $i++ ) {
        if (($a[$i] - $a[$i - 1]) != $d) {
            $result = false;
        }
    }

    if ($result == true) {
        return "a_i = a_(i-1) + N, N=$d";
    } else {
        return false;
    }
  }

  function seqSearch ($a) {
    if (count($a) < 2) { return; }

    $num_var = 3;
    $num_opr = 1;


    #addOperation($variables);
    setVariables();
    setOperations();

  }

  function setVariables () {
    $variables  = array('a', 'b', 'c', 'd');
    $result = array();
    foreach ($variables as $var) {
        $array[] = $var;
        $result[] = $array;
    }
    debug($result);
  }

  function setOperations ($variables) {
    $operations = array (" + ", " - ", " * ", " / ", " ^ ");
    
    $total = pow(2, count($operations));

    # Really COOL algorithm
    # from http://r.je/php-find-every-combination.html

    for($i = 0; $i <= $total; $i++) {
        for($j = 0; $j <= $total; $j++) {
            if (pow(2, $j) & $i) {
                $array[] = $operations[$j];
            }
        }
        if (count($array) > 0 ) {
            $result[] = $array;
            $array = array();
        }
    }
    print_r($result);

  }

  function debug($msg) {
    print_r($msg);
  }
?>

<?php

    class QuestionsManager {

        public $answers;
        private $json;

        function __construct() {
            $this->json = json_decode(file_get_contents('model/questions.json'), true);
            $this->populate_answers();
        }

        function get_questions() {
            //$content = file_get_contents('model/questions.json');
            //$json = json_decode($content, true);
            foreach($this->json['questions'] as $key => $value) {
                print "<li>
                    <div class=\"form-group\">
                        <label class=\"q_title\">({$value["source"]}) {$value["text"]}</label>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answer\" id=\"q{$key}_a\" value=\"a\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_a\">A) {$value["alternatives"]["a"][0]}</label>
                        </div>
                        
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answer\" id=\"q{$key}_b\" value=\"b\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_b\">B) {$value["alternatives"]["b"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answer\" id=\"q{$key}_c\" value=\"c\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_c\">C) {$value["alternatives"]["c"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answer\" id=\"q{$key}_d\" value=\"d\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_d\">D) {$value["alternatives"]["d"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answer\" id=\"q{$key}_e\" value=\"e\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_e\">E) {$value["alternatives"]["e"][0]}</label>
                        </div>
                    </div>
                </li>";
            }
        }

        function get_result($results) {
            $final_answer = [];
            $final_score = 0;

            foreach ($results as $key => $value) {
                switch ($value) {
                    case 'a':
                        $sequence = array(1,0,0,0,0);
                        break;
                    case 'b':
                        $sequence = array(0,1,0,0,0);
                        break;
                    case 'c':
                        $sequence = array(0,0,1,0,0);
                        break;
                    case 'd':
                        $sequence = array(0,0,0,1,0);
                        break;
                    case 'e':
                        $sequence = array(0,0,0,0,1);
                        break;
                    default:
                        break;
                }
                array_push($final_answer, $sequence);
            }

            for($i=0;$i<10;$i++) {
                for($j=0;$j<5;$j++) {
                    if($this->answers[$i][$j] and $final_answer[$i][$j] == 1)
                        $final_score++;
                }
            }

            return $final_score;
        }

        function populate_answers() {
            $alternative = "";

            foreach ($this->json["questions"] as $key => $value) {
                for($i=0;$i<5;$i++) {
                    switch ($i) {
                        case 0:
                            $alternative = "a";
                            break;
                        case 1:
                            $alternative = "b";
                            break;
                        case 2:
                            $alternative = "c";
                            break;
                        case 3:
                            $alternative = "d";
                            break;
                        case 4:
                            $alternative = "e";
                            break;
                        default:
                            break;
                    }
                    $this->answers[$key][$i] = $value["alternatives"][$alternative][1] == 1 ? 1 : 0;
                }
            }
        }
}

?>

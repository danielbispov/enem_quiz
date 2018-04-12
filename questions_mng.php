<?php

    class QuestionsManager {

        function get_questions() {
            $content = file_get_contents('model/questions.json');
            $json = json_decode($content, true);
            $questions = array('q1');
            foreach($json['questions'] as $key => $value) {
                print "<li>
                    <div class=\"form-group\">
                        <label>({$value["source"]}) {$value["text"]}</label>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_a\" value=\"a\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_a\">A) {$value["alternatives"]["a"][0]}</label>
                        </div>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_b\" value=\"b\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_b\">B) {$value["alternatives"]["b"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_c\" value=\"c\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_c\">C) {$value["alternatives"]["c"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_d\" value=\"d\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_d\">D) {$value["alternatives"]["d"][0]}</label>
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <div class=\"input-group-text\">
                                    <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_e\" value=\"e\"/>
                                </div>
                            </div>
                            <label class=\"form-control\" for=\"q{$key}_e\">E) {$value["alternatives"]["e"][0]}</label>
                        </div>
                    </div>
                </li>";
            }
            //echo '<pre>' . print_r($json['questions'][0], true) . '</pre>';
        }
    }
?>

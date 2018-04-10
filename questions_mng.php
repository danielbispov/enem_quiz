<?php
    function get_questions() {
        $i = 0;
        $questions = array('q1', 'q2', 'q3', 'q4','q5','q6','q7','q8','q9', 'q10');
        foreach($questions as $key => $value) {
            print "<li>
                <div class=\"form-group\">
                    <label>{$value}</label>
                    <div>
                        <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_a\" value=\"a\"/>
                        <label for=\"q{$key}_a\">A) </label>
                    </div>

                    <div>
                        <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_b\" value=\"b\"/>
                        <label for=\"q{$key}_b\">B) </label>
                    </div>

                    <div>
                        <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_c\" value=\"c\"/>
                        <label for=\"q{$key}_c\">C) </label>
                    </div>

                    <div>
                        <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_d\" value=\"d\"/>
                        <label for=\"q{$key}_d\">D) </label>
                    </div>

                    <div>
                        <input type=\"radio\" name=\"question_{$key}_answers\" id=\"q{$key}_e\" value=\"e\"/>
                        <label for=\"q{$key}_e\">E) </label>
                    </div>
                </div>
            </li>";
        }
    }
?>

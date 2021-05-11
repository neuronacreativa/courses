package nc.courses.solid.d.fizzbuzzsample.thirdapproach;

import java.util.ArrayList;

public class FizzBuzz
{
    private ArrayList<RuleInterface> rules;

    public String[] generateList(int limit)
    {
        // Generate a list of numbers from 1 to n
        String[] list = new String[limit];
        for (int number = 1; number <= limit; number++) {
            list[number] = this.generateElement(number);
        }
        return list;
    }

    public void addRule(RuleInterface rule) {
        this.rules.add(rule);
    }

    private String generateElement(Integer number)
    {
        for (RuleInterface rule : this.rules) {

            if (rule.matches(number)) {
                return rule.getReplacement();
            }

        }

        return number.toString();
    }
}
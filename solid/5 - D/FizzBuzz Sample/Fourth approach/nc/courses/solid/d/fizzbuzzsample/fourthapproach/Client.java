package nc.courses.solid.d.fizzbuzzsample.fourthapproach;

import java.util.ArrayList;

public class Client {
    public String[] FizzBuzz(int numberOfElements) {

        ArrayList<RuleInterface> rules = new ArrayList<RuleInterface>();

        rules.add(new BuzzRule());
        rules.add(new FizzBuzzRule());

        FizzBuzzUseCase fizzBuzz = new FizzBuzzUseCase(rules);

        return fizzBuzz.generateList(numberOfElements);
    }
}

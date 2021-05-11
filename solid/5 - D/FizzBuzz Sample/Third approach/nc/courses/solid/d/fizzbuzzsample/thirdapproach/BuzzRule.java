package nc.courses.solid.d.fizzbuzzsample.thirdapproach;

public class BuzzRule implements RuleInterface {
    public boolean matches(Integer number) {
        return number % 5 == 0;
    }

    public String getReplacement() {
        return "Buzz";
    }
}


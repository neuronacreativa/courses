package nc.courses.solid.d.fizzbuzzsample.fourthapproach;

public class FizzBuzzRule implements RuleInterface {
    public boolean matches(Integer number) {
        return number % 3 == 0 && number % 5 == 0;
    }

    public String getReplacement() {
        return "FizzBuzz";
    }
}

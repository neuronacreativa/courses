package nc.courses.solid.d.fizzbuzzsample.thirdapproach;

public class FizzRule implements RuleInterface {
    public boolean matches(Integer number) {
        return number % 3 == 0;
    }

    public String getReplacement() {
        return "Fizz";
    }
}
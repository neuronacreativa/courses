package nc.courses.solid.d.fizzbuzzsample.secondapproach;

public class FizzRule {
    public boolean matches(Integer number) {
        return number % 3 == 0;
    }

    public String getReplacement() {
        return "Fizz";
    }
}
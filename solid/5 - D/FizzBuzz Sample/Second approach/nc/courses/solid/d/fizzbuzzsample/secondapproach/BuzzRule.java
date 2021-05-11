package nc.courses.solid.d.fizzbuzzsample.secondapproach;

public class BuzzRule {
    public boolean matches(Integer number) {
        return number % 5 == 0;
    }

    public String getReplacement() {
        return "Buzz";
    }
}


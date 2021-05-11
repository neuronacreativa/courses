package nc.courses.solid.d.fizzbuzzsample.thirdapproach;

public class Client {
    public String[] FizzBuzz(int numberOfElements) {
        FizzBuzz fizzBuzz = new FizzBuzz();

        fizzBuzz.addRule(new FizzBuzzRule());
        fizzBuzz.addRule(new FizzRule());
        fizzBuzz.addRule(new BuzzRule());

        return fizzBuzz.generateList(numberOfElements);
    }
}

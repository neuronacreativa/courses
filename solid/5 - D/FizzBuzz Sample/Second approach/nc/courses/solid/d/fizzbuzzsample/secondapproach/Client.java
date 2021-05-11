package nc.courses.solid.d.fizzbuzzsample.secondapproach;

public class Client {
    public String[] FizzBuzz(int numberOfElements) {
        FizzBuzz fizzBuzz = new FizzBuzz();
        return fizzBuzz.generateList(numberOfElements);
    }
}

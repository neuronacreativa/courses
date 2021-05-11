package nc.courses.solid.d.fizzbuzzsample.secondapproach;

public class FizzBuzz
{
    public String[] generateList(int limit)
    {
        // Generate a list of numbers from 1 to n
        String[] list = new String[limit];
        for (int number = 1; number <= limit; number++) {
            list[number] = this.generateElement(number);
        }
        return list;
    }

    private String generateElement(Integer number)
    {
        // Numbers that are both divisible by 3 and by 5 should be replaced
        // with FizzBuzz
        FizzBuzzRule fizzBuzzRule = new FizzBuzzRule();
        if (fizzBuzzRule.matches(number)) {
            return fizzBuzzRule.getReplacement();
        }

        // Numbers that are divisible by 3 should be replaced with Fizz
        FizzRule fizzRule = new FizzRule();
        if (fizzRule.matches(number)) {
            return fizzRule.getReplacement();
        }

        // Numbers that are divisible by 5 should be replaced with Buzz
        BuzzRule buzzRule = new BuzzRule();
        if (buzzRule.matches(number)) {
            return buzzRule.getReplacement();
        }

        return number.toString();
    }
}
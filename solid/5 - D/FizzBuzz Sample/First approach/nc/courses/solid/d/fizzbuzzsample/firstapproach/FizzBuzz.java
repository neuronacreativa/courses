package nc.courses.solid.d.fizzbuzzsample.firstapproach;

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
        if (number % 3 == 0 && number % 5 == 0) {
            return "FizzBuzz";
        }

        // Numbers that are divisible by 3 should be replaced with Fizz
        if (number % 3 == 0) {
            return "Fizz";
        }

        // Numbers that are divisible by 5 should be replaced with Buzz
        if (number % 5 == 0) {
            return "Buzz";
        }
        return number.toString();
    }
}
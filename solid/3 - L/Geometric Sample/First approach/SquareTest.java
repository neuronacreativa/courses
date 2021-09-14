import org.junit.Test;

import static org.junit.Assert.assertNotEquals;

public class SquareTest {
    @Test
    public void not_respect_the_liskov_substitution_principle_breaking_the_rectangle_laws_while_modifying_its_length() {
        Integer squareLengthAndWidth = 2;
        Square square = new Square(squareLengthAndWidth);

        Integer newSquareLength = 4;
        square.setLength(newSquareLength);

        Integer expectedAreaTakingIntoAccountRectangleLaws = 8;

        assertNotEquals(expectedAreaTakingIntoAccountRectangleLaws, square.getArea());
    }
}
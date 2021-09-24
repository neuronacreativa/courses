package nc.courses.solid.l.productssample.secodapproach;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class ProductTest {

    @Test
    void addConcreteProduct() {
        ConcreteProductManager concreteProductManager = new ConcreteProductManager();

        Assertions.assertDoesNotThrow(
                () -> concreteProductManager.add(
                        new ConcreteProduct(
                                100,
                                "valid-uuid",
                                "This is an abstract product name"
                        )
                )
        );
    }
}

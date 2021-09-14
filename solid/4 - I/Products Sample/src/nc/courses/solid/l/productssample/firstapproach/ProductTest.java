package nc.courses.solid.l.productssample.firstapproach;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class ProductTest {

    @Test
    void addConcreteProduct() {
        ProductManager productManager = new ProductManager();

        Assertions.assertDoesNotThrow(
                () -> productManager.add(
                        new ConcreteProduct(
                                100,
                                "valid-uuid",
                                "This is a concrete product name"
                        )
                )
        );
    }

    @Test
    void addAbstractProduct() {
        ProductManager productManager = new ProductManager();

        Assertions.assertDoesNotThrow(
                () -> productManager.add(
                        new AbstractProduct(
                                "valid-uuid",
                                "This is an abstract product name"
                        )
                )
        );
    }
}

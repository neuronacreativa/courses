package nc.courses.solid.l.productssample.secodapproach;

public class ConcreteProductManager {

    public void add(ConcreteProductInterface product) {
        product.setStock(
                product.getStock() + 1
        );
    }

    public void delete(ConcreteProductInterface product) {
        product.setStock(
                product.getStock() - 1
        );
    }
}

package nc.courses.solid.l.productssample.firstapproach;

public class ProductManager {

    public void add(Product product) {
        product.setStock(
                product.getStock() + 1
        );
    }

    public void delete(Product product) {
        product.setStock(
                product.getStock() - 1
        );
    }
}

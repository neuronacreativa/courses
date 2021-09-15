package nc.courses.solid.l.productssample.secodapproach;

public class ConcreteProduct implements Product, ConcreteProductInterface {

    private Integer stock;
    private String uuid;
    private String name;

    public ConcreteProduct(Integer stock, String uuid, String name) {
        this.stock = stock;
        this.uuid = uuid;
        this.name = name;
    }

    @Override
    public String getUuid() {
        return this.uuid;
    }

    @Override
    public void setUuid(String uuid) {
        this.uuid = uuid;
    }

    @Override
    public String getName() {
        return this.name;
    }

    @Override
    public void setName(String name) {
        this.name = name;
    }

    @Override
    public Integer getStock() {
        return null;
    }

    @Override
    public void setStock(Integer stock) {

    }
}

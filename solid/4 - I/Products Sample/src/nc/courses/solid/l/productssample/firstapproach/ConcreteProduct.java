package nc.courses.solid.l.productssample.firstapproach;

public class ConcreteProduct implements Product{

    private Integer stock;
    private String uuid;
    private String name;

    @Override
    public Integer getStock() {
        return this.stock;
    }

    @Override
    public void setStock(Integer stock) {
        this.stock = stock;
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
}

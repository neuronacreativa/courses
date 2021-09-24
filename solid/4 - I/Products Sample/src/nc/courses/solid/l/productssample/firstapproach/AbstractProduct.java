package nc.courses.solid.l.productssample.firstapproach;

public class AbstractProduct implements Product{

    private String uuid;
    private String name;

    public AbstractProduct(String uuid, String name) {
        this.uuid = uuid;
        this.name = name;
    }

    @Override
    public Integer getStock() {
        throw new UnsupportedOperationException();
    }

    @Override
    public void setStock(Integer stock) {
        throw new UnsupportedOperationException();
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

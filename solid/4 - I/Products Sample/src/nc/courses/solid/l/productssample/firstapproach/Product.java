package nc.courses.solid.l.productssample.firstapproach;

public interface Product {
    Integer getStock();
    void setStock(Integer stock);
    String getUuid();
    void setUuid(String uuid);
    String getName();
    void setName(String name);
}

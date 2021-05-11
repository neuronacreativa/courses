package nc.courses.solid.l.entitymanagersample.thirdapproach;

public interface PersistsEntitiesInterface {
    public void persist(Object entity);
    public void flush();
}

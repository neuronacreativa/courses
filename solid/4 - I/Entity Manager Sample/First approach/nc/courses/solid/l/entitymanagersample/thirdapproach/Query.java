package nc.courses.solid.l.entitymanagersample.thirdapproach;

public class Query {

    EntityManager entityManager;

    public Query(EntityManager entityManager)
    {
        this.entityManager = entityManager;
    }

    public UnitOfWork someMethod()
    {
        return this.entityManager.getUnitOfWork();
    }
}

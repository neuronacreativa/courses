package nc.courses.solid.l.entitymanagersample.secondapproach;

public class UserRepository {

    // Id depends on EntityManager
    public UserRepository(EntityManager entityManager) {
        // ...
    }
}

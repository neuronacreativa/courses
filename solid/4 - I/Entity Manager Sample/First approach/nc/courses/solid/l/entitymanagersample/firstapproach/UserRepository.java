package nc.courses.solid.l.entitymanagersample.firstapproach;

public class UserRepository {

    // Id depends on EntityManager
    public UserRepository(EntityManager entityManager) {
        // ...
    }
}

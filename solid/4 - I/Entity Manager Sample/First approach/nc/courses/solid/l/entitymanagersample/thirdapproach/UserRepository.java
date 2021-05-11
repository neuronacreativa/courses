package nc.courses.solid.l.entitymanagersample.thirdapproach;

public class UserRepository {

    // Id depends on EntityManager
    public UserRepository(EntityManager entityManager) {
        // ...
    }
}

package nc.courses.solid.s.blogsample.repository;

import nc.courses.solid.s.blogsample.model.User;

public interface UserRepository {

    public User save(User post);

    public User findByUuid(String uuid);

    public void deleteByUuid(String uuid);
}

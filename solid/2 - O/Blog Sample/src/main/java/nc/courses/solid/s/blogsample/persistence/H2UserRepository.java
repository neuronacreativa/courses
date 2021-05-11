package nc.courses.solid.s.blogsample.persistence;

import nc.courses.solid.s.blogsample.model.User;
import nc.courses.solid.s.blogsample.repository.UserRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2UserRepository extends UserRepository, CrudRepository<User, String> {

    public User findByUuid(String uuid);

    public void deleteByUuid(String uuid);

}

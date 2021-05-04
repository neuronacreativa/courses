package nc.courses.solid.s.blogsample.persistence;

import nc.courses.solid.s.blogsample.model.Post;
import nc.courses.solid.s.blogsample.repository.PostRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

@Repository
@Transactional
public interface H2PostRepository extends PostRepository, CrudRepository<Post, String> {

    public Post findByUuid(String uuid);

    public void deleteByUuid(String uuid);

}

package nc.courses.solid.s.blogsample.repository;


import nc.courses.solid.s.blogsample.model.Post;

import java.util.List;

public interface PostRepository {

    public Post save(Post post);

    public Post findByUuid(String uuid);

    public List<Post> findByUserUuid(String uuid);

    public void deleteByUuid(String uuid);
}

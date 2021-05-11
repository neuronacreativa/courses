package nc.courses.solid.s.blogsample.controller;

import nc.courses.solid.s.blogsample.persistence.H2PostRepository;
import nc.courses.solid.s.blogsample.request.PostRequest;
import nc.courses.solid.s.blogsample.response.PostResponse;
import nc.courses.solid.s.blogsample.usecases.PostService;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("post")
public class PostController {

    private PostService service;

    private H2PostRepository repository;

    @PostMapping
    public ResponseEntity<PostResponse> create(
            @RequestPart("post") PostRequest postRequest){

        return ResponseEntity.ok().body(
                service.create(postRequest, repository)
        );
    }

    @GetMapping("/{uuid}")
    public ResponseEntity<PostResponse> read(
            @PathVariable(name = "uuid") String uuid){

        return ResponseEntity.ok().body(
                service.read(uuid, repository)
        );
    }

    @PutMapping
    public ResponseEntity<PostResponse> update(
            @RequestParam("uuid") String uuid,
            @RequestPart("post") PostRequest postRequest){

        return ResponseEntity.ok().body(
                service.update(uuid, postRequest, repository)
        );
    }

    @DeleteMapping("/{uuid}")
    public ResponseEntity<PostResponse> delete(
            @PathVariable(name = "uuid") String uuid){

        service.delete(uuid, repository);

        return ResponseEntity.ok().body(null);
    }

}

package nc.courses.solid.s.blogsample.controller;

import nc.courses.solid.s.blogsample.persistence.H2UserRepository;
import nc.courses.solid.s.blogsample.request.UserRequest;
import nc.courses.solid.s.blogsample.response.UserResponse;
import nc.courses.solid.s.blogsample.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("user")
public class UserController {

    @Autowired
    private UserService service;

    private H2UserRepository repository;

    @PostMapping
    public ResponseEntity<UserResponse> create(
            @RequestPart("user") UserRequest userRequest){

        return ResponseEntity.ok().body(
                service.create(userRequest, repository)
        );
    }

    @GetMapping("/{uuid}")
    public ResponseEntity<UserResponse> read(
            @PathVariable(name = "uuid") String uuid){

        return ResponseEntity.ok().body(
                service.read(uuid, repository)
        );
    }

    @PutMapping
    public ResponseEntity<UserResponse> update(
            @PathVariable("uuid") String uuid,
            @RequestPart("user") UserRequest userRequest){

        return ResponseEntity.ok().body(
                service.update(uuid, userRequest, repository)
        );
    }

    @GetMapping("/increasePostCount/{uuid}")
    public ResponseEntity<UserResponse> increasePostCount(
            @PathVariable("uuid") String uuid){

        return ResponseEntity.ok().body(
                service.increasePostCount(uuid, repository)
        );
    }

    @GetMapping("/decreasePostCount/{uuid}")
    public ResponseEntity<UserResponse> decreasePostCount(
            @PathVariable("uuid") String uuid){

        return ResponseEntity.ok().body(
                service.decreasePostCount(uuid, repository)
        );
    }

    @DeleteMapping("/{uuid}")
    public ResponseEntity<UserResponse> delete(
            @PathVariable(name = "uuid") String uuid){

        service.delete(uuid, repository);

        return ResponseEntity.ok().body(null);
    }
}

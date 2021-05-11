package nc.courses.solid.s.blogsample.controller;

import nc.courses.solid.s.blogsample.persistence.H2UserRepository;
import nc.courses.solid.s.blogsample.response.UserResponse;
import nc.courses.solid.s.blogsample.usecases.UserPostCounterService;
import nc.courses.solid.s.blogsample.usecases.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("user/postcounter")
public class UserPostCounterController {

    @Autowired
    private UserPostCounterService service;

    private H2UserRepository repository;

    @GetMapping("/increase/{uuid}")
    public ResponseEntity<UserResponse> increasePostCount(
            @PathVariable("uuid") String uuid){

        return ResponseEntity.ok().body(
                service.increasePostCount(uuid, repository)
        );
    }

    @GetMapping("/decrease/{uuid}")
    public ResponseEntity<UserResponse> decreasePostCount(
            @PathVariable("uuid") String uuid){

        return ResponseEntity.ok().body(
                service.decreasePostCount(uuid, repository)
        );
    }
}

package org.nc.monolith.infrastructure.config;

import java.util.Collections;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import springfox.documentation.builders.PathSelectors;
import springfox.documentation.builders.RequestHandlerSelectors;
import springfox.documentation.service.ApiInfo;
import springfox.documentation.service.Contact;
import springfox.documentation.spi.DocumentationType;
import springfox.documentation.spring.web.plugins.Docket;
import springfox.documentation.swagger2.annotations.EnableSwagger2;

@Configuration
@EnableSwagger2
public class MonolithConfig {

	@Bean
	public Docket apiDocket() {
		return new Docket(DocumentationType.SWAGGER_2)
				.select()
				.apis(RequestHandlerSelectors.basePackage("org.nc.monolith.infrastructure.controller"))
				.paths(PathSelectors.any())
				.build()
				.apiInfo(getApiInfo())
				;
	}
	
	private ApiInfo getApiInfo() {
		return new ApiInfo(
				"Sample Monolith API",
				"Sample Monolith API Description",
				"1.0",
				"https://altran.com",
				new Contact("Ricardo Ortega", "https://altran.com", "ricardo.ortegaavalo@altran.com"),
				"LICENSE",
				"LICENSE URL",
				Collections.emptyList()
				);
	}
}

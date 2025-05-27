gsap.to(".loader", 0.25, {
    delay: 3.5,
    opacity: 0,
  })

  gsap.to (".bar", 1.5, {
    delay: 3.5,
    height: 0,
    stagger: {
      amount: 0.5,
    },
    ease: "power4.inOut",
  })

  gsap.to (".overlay",{
    zIndex: -1,
    delay: 5,
  })
  gsap.to (".loader",{
    zIndex: -1,
    delay: 5,
  })

  gsap.to (".header",{
    zIndex: 10000000,
    delay: 5,
    duration: 7,
    
  })